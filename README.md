# interpagapi
API para o Interpag

### api.bancointer.com.br/v1/

POST
api.bancointer.com.br/v1/qr-code/

&token="giygsuhuhdudneindlksndm93ue9078098"

&item-1="15"

&nome-1="bola de futebol"

&descricao-1="bola kichute"

&valor-1="1000"

&quantidade-1="2"

&item-2="15"

&nome-2="chuteira"

&descricao-2="adidas campo"

&valor-2="20000"

&quantidade-2="1"

&referenciaCompra="1789"

&data="01/01/1990"



### Mensagens de Resposta:
- 400	Bad Request
- 401	Unauthorized
- 403	Forbidden
- 404	Not Found (Ocorre quando não é encontrado a transacão informada)
- 500	Internal Server Error


