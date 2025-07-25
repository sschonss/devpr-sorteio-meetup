# Sorteio DEV Paraná 

Este projeto é utilizado nos meetups do DEV Paraná para realizar sorteios de brindes entre os participantes do evento.

## Como funciona

1. **Cadastro dos participantes:**
   - Os participantes se cadastram em uma planilha online durante o evento.
   - Ao final do cadastro, exporte a planilha para o formato CSV e salve como `data.csv` na raiz deste projeto.
   - O arquivo deve conter as colunas: `Carimbo de data/hora, Endereço de e-mail, Nome Completo, Email, Whatsapp`.

2. **Sorteio animado no terminal:**
   - Execute o sorteio pelo terminal com:
     ```sh
     php index.php
     ```
   - O sistema faz uma contagem regressiva, suspense animado e revela o vencedor com arte e cores no terminal.
   - As informações do sorteado (nome, email, telefone) são exibidas de forma destacada e divertida.

## Requisitos
- PHP 8.1 ou superior
- Terminal compatível com cores ANSI (a maioria dos terminais modernos)

## Personalização
- Você pode editar o arquivo `index.php` para mudar a arte, emojis ou campos exibidos.
- O sistema foi feito para ser simples, divertido e fácil de usar nos eventos presenciais do DEV Paraná.

---

**DEV Paraná**

Comunidade de desenvolvedores do Paraná, promovendo networking, aprendizado e oportunidades através de meetups, eventos e sorteios!

Siga o DEV Paraná nas redes sociais e participe dos próximos encontros!
