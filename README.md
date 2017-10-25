# interpagapi
API para o Interpag

### api.bancointer.com.br/v1/

POST
api.bancointer.com.br/v1/qr-code/

&Token="giygsuhuhdudneindlksndm93ue9078098"

&Item-1="15"

&nome-1="bola de futebol"

&Descricao-1="bola kichute"

&Valor-1="1000"

&Quantidade-1="2"

&Item-2="15"

&nome-2="chuteira"

&Descricao-2="adidas campo"

&Valor-2="20000"

&Quantidade-2="1"

&ReferenciaCompra="1789"

&Data="01/01/1990"



### Mensagens de Resposta:
- 400	Bad Request
- 401	Unauthorized
- 403	Forbidden
- 404	Not Found (Ocorre quando não é encontrado a transacão informada)
- 500	Internal Server Error


