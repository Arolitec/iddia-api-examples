import requests
import json

url = "<REPLACE_WITH_PROD_URL>/api/v1/complaints"
payload = {
  "complaintTypeId": 1,
  "customerBankAccountNumber": "1234567890",
  "customerName": "Nom du client",
  "customerPhoneNumber": "2250555607018",
  "customerEmail": "email@example.com",
  "description": "Description de la réclamation",
  "dynamicInfo": "{\"name\": \"my name\"}" # Objet stringifié
}
headers = {
  'Authorization': 'Bearer <REPLACE_WITH_YOUR_API_KEY>',
  'Content-Type': 'application/json'
}

response = requests.post(url, json=payload, headers=headers)
data = response.json()
print(json.dumps(data))
