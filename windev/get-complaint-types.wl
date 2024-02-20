PROCÉDURE RécupérerTypesDeRéclamations()
    // Déclaration des variables
    apiUrl est une chaîne = "<REPLACE_WITH_PROD_URL>/api/v1/complaint-types"
    token est une chaîne = "<REPLACE_WITH_YOUR_API_KEY>"
    httpRequest est un HTTPRequête
    réponse est une chaîne

    // Configuration de la requête
    HTTPRequêteInitialise(httpRequest, apiUrl)
    HTTPRequêteAjouteEntête(httpRequest, "Authorization", "Bearer " + token)
    HTTPRequêteAjouteEntête(httpRequest, "Content-Type", "application/json")

    // Envoi de la requête
    SI HTTPRequêteEnvoie(httpRequest, httpGet) ALORS
        réponse = HTTPRequêteLitRéponse(httpRequest)
        Info(réponse)
    SINON
        Erreur("Erreur lors de la récupération des types de réclamations : " + HTTPRequêteInfo(httpRequest, httpInfoRaison))
    FIN
FINPROCÉDURE
