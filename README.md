# interpagapi

API para o Interpag


Guia de integração
Fácil de usar e seguro para comprar

### Como funciona?
1. Sistema do Lojista com opção de pagamento via Interpag. 
2. Valor da compra é enviado via API para popular o plugin. 
3. O cliente aponta para a tela e digita o PIN para confirmar a compra.
4. Compra Efetuada!

### Telas

![alt text](https://raw.githubusercontent.com/pimatco/interpagapi/master/sistema-qrcode.png)


![alt text](https://raw.githubusercontent.com/pimatco/interpagapi/master/processo-qrcode.png)


### REST. Por que?

> “Coleção de computadores independentes que se apresenta ao usuário como um sistema único e consistente”
Andrew Tanenbaum

## api.bancointer.com.br/v1/

O client precisa saber somente a URI inicial e subsequentemente faz escolhas que o servidor forneceu para navegar ou realizar ações. 



###Processo de Geração de qr-code para Sistema de Terceiros

POST
api.bancointer.com.br/v1/qr-code/

### Json
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
  
       "valorTotal":"25000"
  
       "referenciaId":"1789",
  
       "data":"25/01/1990"
 
     }

## MODELO DE BODY

[string] pin = Codigo de verificação unico para acesso a area restrita ao cliente.

[object] item = Codigo de indentificação do produto.

[string] nome = nome que é referenciado o produto.

[string] descricao = descrição do produto

[int] valor = valor do produto escrito sem virgula ou ponto sendo que os 2 ultimos digitos representão os centavos.

[int] quantidade = quantidade do produto.

[int] valorTotal = valor total da compra

[string] referenciaId = codigo usado para referenciar a compra

[string] data = data de cadastro

## EXEMPLO DE RESPOSTA

### Json
      {
  
    "data":"2009-06-15T13:45:30",
    "valorTotal":"60000",
    "qr-code":" "iVBORw0KGgoAAAANSUhEUgAAAMgAAADIAQAAAACFI5MzAAABF0lEQVR42u2YTRKDIAyFw4pjcNMC
                 N+UYrKAvCTJq222ThQw6yOfiaX6V5q9BD3nIn0khjFRnCz3NzhfBDak4eiqUSmwZUHeckE5Lb2Th
                 hZ/AG+FZXRLYPK+FJyLWhie+Iu769ANLsqKk6/wSP4ZEB+9F0XvPO5YE5h2UjjMkt+CGQOmIzKeY
                 fcAl3RB9nZk9EZlPM7QjMiVEkPyCrLMbMmQPkkmKxkm1C1LF+0rU9Y4SeyL5eFXa6xu1JxIojaIK
                 x7YjUg4fHGxqHn7IIXyd6y1+TIlWM0h+re7pVucsye46NUROUeKASNO0TX2uZl6IfEygYvB0Rqq0
                 A4UuXzn2RLvOVcq0A/VCdtcpqtGntOCGPP8PHmJP3vHeJAvXf8ttAAAAAElFTkSuQmCC"
  
     }

## MODELO DE BODY

[string] data = data de cadastro

[int] valorTotal = valor total da compra

[string] qr-code = Codigo gerado para a compra.


### Receber QR-CODE no Aplicativo

GET
api.bancointer.com.br/v1/qr-code/

Header
            "pin":"qwertyuiasd234sdfgcv567dfgh678",            

            "qr-code":"iVBORw0KGgoAAAANSUhEUgAAAMgAAADIAQAAAACFI5MzAAABF0lEQVR42u2YTRKDIAyFw4pjcNMC
            N+UYrKAvCTJq222ThQw6yOfiaX6V5q9BD3nIn0khjFRnCz3NzhfBDak4eiqUSmwZUHeckE5Lb2Th
            hZ/AG+FZXRLYPK+FJyLWhie+Iu769ANLsqKk6/wSP4ZEB+9F0XvPO5YE5h2UjjMkt+CGQOmIzKeY
            fcAl3RB9nZk9EZlPM7QjMiVEkPyCrLMbMmQPkkmKxkm1C1LF+0rU9Y4SeyL5eFXa6xu1JxIojaIK
            x7YjUg4fHGxqHn7IIXyd6y1+TIlWM0h+re7pVucsye46NUROUeKASNO0TX2uZl6IfEygYvB0Rqq0
            A4UuXzn2RLvOVcq0A/VCdtcpqtGntOCGPP8PHmJP3vHeJAvXf8ttAAAAAElFTkSuQmCC"
    
## MODELO DE BODY

[string] pin = codigo de identificação

[string] qr-code = Codigo gerado para a compra.


## EXEMPLO DE RESPOSTA

### Json
      {
  
    "codigo":"1qaz2wsx3edc2wsx3ed4rfv"
  
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
    "valorTotal":"25000"

 
     }

## MODELO DE BODY

[string] item = Codigo de indentificação de pedido.

[object] item = Codigo de indentificação do produto.

[string] nome = nome que é referenciado o produto.

[string] descricao = descrição do produto

[int] valor = valor do produto escrito sem virgula ou ponto sendo que os 2 ultimos digitos representão os centavos.

[int] quantidade = quantidade do produto.

[int] valorTotal = valor total da compra

### Confimação de pagamento

PATCH
api.bancointer.com.br/v1/qr-code/{codigo}

Header
"pin":"qwertyuiasd234sdfgcv567dfgh678",

### Json
      {  
    "status":"3",
    "token-sms":"1536"
  
     }

## MODELO DE BODY

 [int] status = parametro de estado da compra
 
 [int] tokenSms = token recebido via sms
 
 EXEMPLO DE RESPOSTA
 
 ### Json
           { 


          "transacao-id":" "iVBO456GgoAAAAN"


           }
 
 ### MODELO DE BODY


 
 [string] transacaoId = codigo de transacao gerada pelo sistema
 
### Buscar Informacao da conta Pelo Sistema e Pelo Aplicativo
 
GET
api.bancointer.com.br/v1/transacaoId/{transacaoId}
 
Header
"pin":"qwertyuiasd234sdfgcv567dfgh678",
 
 
 EXEMPLO DE RESPOSTA

### Json
      {
      

    "status:"3",
    "data":"2009-06-15T13:45:30"
    "codigo":"1qaz2wsx3edc2wsx3ed4rfv",
  
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
    "valorTotal":"25000"

 
     }

## MODELO DE BODY


[int] status = data de alteracao do estatus da compra

[object] item = carrinho de produtos.

[string] nome = nome que é referenciado o produto.

[string] descricao = descrição do produto

[int] valor = valor do produto escrito sem virgula ou ponto sendo que os 2 ultimos digitos representão os centavos.

[int] quantidade = quantidade do produto.

[int] valorTotal = valor total da compra 
 
  
### Historico de Trasacao  
  
GET
api.bancointer.com.br/v1/transacao/
 
Header
"pin":"qwertyuiasd234sdfgcv567dfgh678",
 
 
 ### EXEMPLO DE RESPOSTA


### Json


    {   
    
   
      "1":{
      "transacao-id":" "iVBO456GgoAAAAN"
      },
      "2":{
      "transacao-id":" "iVBO456GgoAAAAN"
      },
      "3":{
      "transacao-id":" "iVBO456GgoAAAAN"
      }
    
  
     }
     
     
## MODELO DE BODY

[string] transacao-id = codigo de transacao gerada pelo sistema
 
  

### Mensagens de Resposta:
- 200 OK
- 201 Created
- 400	Bad Request
- 401	Unauthorized
- 403	Forbidden
- 404	Not Found (Ocorre quando não é encontrado a transacão informada)
- 500	Internal Server Error
