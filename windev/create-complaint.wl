PROCÉDURE Créerréclamation()
    // Déclaration des variables
    apiUrl est une chaîne = "<REPLACE_WITH_PROD_URL>/api/v1/complaints"
    token est une chaîne = "<REPLACE_WITH_YOUR_API_KEY>"
    httpRequest est un HTTPRequête
    payload est une chaîne

    // Construction du corps de la requête
    payload = [
        {
            "complaintTypeId": 123,
            "customerBankAccountNumber": "1234567890",
            "customerName": "John Doe",
            "customerPhoneNumber": "2250555607018",
            "customerEmail": "john.doe@example.com",
            "description": "Description de la réclamation",
            "dynamicInfo": "{\"name\": \"my name\"}"
        }
    ]

    // Configuration de la requête
    HTTPRequêteInitialise(httpRequest, apiUrl)
    HTTPRequêteAjouteEntête(httpRequest, "Authorization", "Bearer " + token)
    HTTPRequêteAjouteEntête(httpRequest, "Content-Type", "application/json")
    HTTPRequêteDéfinitDonnéesPost(httpRequest, payload)

    // Envoi de la requête
    SI HTTPRequêteEnvoie(httpRequest, httpPost) ALORS
        INFO(HTTPRequêteLitRéponse(httpRequest))
    SINON
        ERREUR("Erreur lors de la création de la réclamation : " + HTTPRequêteInfo(httpRequest, httpInfoRaison))
    FIN
FINPROCÉDURE
