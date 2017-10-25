# interpagapi
API para o Interpag

### api.bancointer.com.br/v1/

POST
api.bancointer.com.br/v1/qr-code/

  Json
    {
  
    "pin": "giygsuhuhdudneindlksndm93ue9078098",
  
     "item": {
    
      "15":{
      
        "nome":"bola",
        
        "descricao":"bola kichute",
        
        "valor":"1000",
        
        "quantidade":"2"
        
      }
      "17":{
      
        "nome":"chuteira",
        
        "descricao":"adidas campo",
        
        "valor":"24000",
        
        "quantidade":"1"
        
      }

    },
  
       "referenciaCompra":"1789",
  
       "data":"25/01/1990"
 
     }

MODELO DE BODY

[string] pin = Codigo de verificação unico para acesso a area restrita ao cliente.

[object] item = Codigo de indentificação do produto.

[string] nome = nome que é referenciado o produto.

[string] descricao = descrição do produto

[int] valor} = valor do produto escrito sem virgula ou ponto sendo que os 2 ultimos digitos representão os centavos.

[int] quantidade = quantidade do produto.

[string] referenciaCompra = codigo usado para referenciar a compra

[string] data = data separado por "barra"



### Mensagens de Resposta:
- 400	Bad Request
- 401	Unauthorized
- 403	Forbidden
- 404	Not Found (Ocorre quando não é encontrado a transacão informada)
- 500	Internal Server Error


