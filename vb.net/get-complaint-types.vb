Imports System.Net.Http
Imports System.Net.Http.Headers
Imports System.Threading.Tasks

Module Module1
    Sub Main()
        Dim apiUrl As String = "<REPLACE_WITH_PROD_URL>/api/v1/complaint-types"
        Dim token As String = "<REPLACE_WITH_YOUR_API_KEY>"

        Dim client As New HttpClient()

        ' Ajoute le jeton d'authentification au header
        client.DefaultRequestHeaders.Authorization = New AuthenticationHeaderValue("Bearer", token)

        ' Envoie une requête GET
        Dim response As HttpResponseMessage = client.GetAsync(apiUrl).Result

        If response.IsSuccessStatusCode Then
            Dim responseContent As String = response.Content.ReadAsStringAsync().Result
            Console.WriteLine(responseContent)
        Else
            Console.WriteLine("Erreur lors de la récupération des types de réclamations: " & response.ReasonPhrase)
        End If
    End Sub
End Module
