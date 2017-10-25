# interpagapi
API para o Interpag

### api.bancointer.com.br/v1/

POST
api.bancointer.com.br/v1/qr-code/

&token="giygsuhuhdudneindlksndm93ue9078098"

&item-0="15"

&nome-0="bola de futebol"

&descricao-0="bola kichute"

&valor-0="1000"

&quantidade-0="2"

&item-1="15"

&nome-1="chuteira"

&descricao-1="adidas campo"

&valor-1="20000"

&quantidade-1="1"

&referenciaCompra="1789"

&data="25/01/1990"

MODELO DE BODY

[string] token = Codigo de verificação unico para acesso a area restrita ao cliente.

[int] item-{numero} = Codigo de indentificação do produto.

[string] nome-{numero} = nome que é referenciado o produto.

[string] descricao-{numero} = descrição do produto

[int] valor-{numero} = valor do produto escrito sem virgula ou ponto sendo que os 2 ultimos digitos representão os centavos.

[int] quantidade-{numero} = quantidade do produto.

[string] referenciaCompra = codigo usado para referenciar a compra

[string] data = data separado por "barra"



### Mensagens de Resposta:
- 400	Bad Request
- 401	Unauthorized
- 403	Forbidden
- 404	Not Found (Ocorre quando não é encontrado a transacão informada)
- 500	Internal Server Error


