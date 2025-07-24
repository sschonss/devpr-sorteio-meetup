# LittleTiger Sorteio

Este projeto realiza sorteios de participantes a partir de um arquivo `data.csv` exportado de uma planilha de cadastro.

## Como usar

1. **Exporte a planilha de cadastro** para o formato CSV e salve o arquivo como `data.csv` na raiz deste projeto.
   - O arquivo deve conter as colunas: `Carimbo de data/hora, Endereço de e-mail, Nome Completo, Email, Whatsapp, ...`
   - O sorteio será feito com base na coluna "Nome Completo".

2. **Execute o sorteio pelo terminal:**

```sh
php index.php
```

O nome do vencedor será exibido no terminal.

---

Se precisar de suporte ou quiser sortear outros campos, edite o código conforme necessário.

