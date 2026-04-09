const express = require('express');
const path = require('path');
const app = express();
const port = process.env.PORT || 3000;

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, 'public')));

function validatePayload(payload){
  const errs = [];
  if(!payload.nome || !payload.nome.trim()) errs.push({field:'nome', msg:'Nome obbligatorio'});
  if(!payload.cognome || !payload.cognome.trim()) errs.push({field:'cognome', msg:'Cognome obbligatorio'});
  if(!payload.dataDiNascita) errs.push({field:'dataDiNascita', msg:'Data di nascita obbligatoria'});
  const cf = (payload.codiceFiscale||'').toUpperCase().trim();
  if(!cf) errs.push({field:'codiceFiscale', msg:'Codice fiscale obbligatorio'});
  else if(!/^[A-Z0-9]{16}$/i.test(cf)) errs.push({field:'codiceFiscale', msg:'Codice fiscale deve essere di 16 caratteri alfanumerici'});

  if(!Array.isArray(payload.classi) || payload.classi.length===0) errs.push({field:'classi', msg:'Selezionare almeno una classe'});
  if(!Array.isArray(payload.sezioni) || payload.sezioni.length===0) errs.push({field:'sezioni', msg:'Selezionare almeno una sezione'});
  if(payload.ripetente){
    if(payload.anniRipetuti===undefined || payload.anniRipetuti===null || payload.anniRipetuti===0) errs.push({field:'anniRipetuti', msg:'Inserire il numero di anni ripetuti'});
    else if(Number(payload.anniRipetuti) < 1) errs.push({field:'anniRipetuti', msg:'Gli anni ripetuti devono essere >= 1'});
  }
  if(!Array.isArray(payload.uscita) || payload.uscita.length===0) errs.push({field:'uscita', msg:'Selezionare almeno una destinazione di uscita'});

  return errs;
}

app.post('/submit', (req, res) => {
  // accept JSON body
  const body = req.body;
  // ensure arrays for multiselects if single value sent
  const normalize = (v)=>{
    if(v===undefined || v===null) return [];
    if(Array.isArray(v)) return v;
    if(typeof v === 'string') return v ? [v] : [];
    return [];
  }

  const payload = {
    nome: (body.nome||'').toString(),
    cognome: (body.cognome||'').toString(),
    dataDiNascita: body.dataDiNascita || '',
    codiceFiscale: (body.codiceFiscale||'').toString(),
    classi: normalize(body.classi),
    sezioni: normalize(body.sezioni),
    ripetente: body.ripetente === true || body.ripetente === 'on' || body.ripetente === 'true',
    anniRipetuti: body.anniRipetuti ? Number(body.anniRipetuti) : 0,
    uscita: normalize(body.uscita)
  };

  const errors = validatePayload(payload);
  if(errors.length){
    return res.status(400).json({errors});
  }

  // success: return the normalized payload
  return res.json({data: payload});
});

// server-rendered result page (dynamic)
app.get('/result', (req, res) => {
  const data = req.query.data;
  if(!data) return res.sendFile(path.join(__dirname, 'public', 'result.html'));
  try{
    const obj = JSON.parse(decodeURIComponent(data));
    const html = `<!doctype html><html><head><meta charset="utf-8"><title>Risultato server</title><style>body{font-family:Segoe UI, Tahoma, Geneva, Verdana, sans-serif;padding:20px}pre{background:#f5f5f5;padding:12px;border-radius:6px;overflow:auto}</style></head><body><h1>Dati inviati (server-rendered)</h1><pre>${JSON.stringify(obj,null,2)}</pre><a href="/">Torna al form</a></body></html>`;
    return res.send(html);
  }catch(err){
    return res.status(400).send('Parametro data non valido');
  }
});

app.listen(port, () => console.log(`Server avviato su http://localhost:${port}`));
