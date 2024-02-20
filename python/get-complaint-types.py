import requests

api_url = '<REPLACE_WITH_PROD_URL>/api/v1/complaint-types'
token = '<REPLACE_WITH_YOUR_API_KEY>'

headers = {
    'Authorization': 'Bearer ' + token,
    'Content-Type': 'application/json'
}

try:
    response = requests.get(api_url, headers=headers)
    response.raise_for_status()  # Raise exception for non-2xx responses

    print(response.json())
except requests.exceptions.RequestException as e:
    print('Erreur lors de la récupération des types de réclamations:', e)
