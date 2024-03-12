const express = require('express');
const app = express();

// Rota padrão na porta 80
app.get('/', (req, res) => {
  res.send('Olá mundo!');
});

// Inicie o servidor na porta 80
const PORT = process.env.PORT || 80;
app.listen(PORT, () => {
  console.log("Servidor está rodando na porta ${PORT}");
});