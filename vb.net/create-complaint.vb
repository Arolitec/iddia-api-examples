Imports RestSharp

Module Module1
    Sub Main()
        Dim client As New RestClient("<REPLACE_WITH_PROD_URL>/api/v1/complaints")
        client.Timeout = -1

        Dim request As New RestRequest(Method.POST)
        request.AddHeader("Authorization", "Bearer <REPLACE_WITH_YOUR_API_KEY>")
        request.AddHeader("Content-Type", "application/json")

        Dim body As String = "{" & vbCrLf &
        "    ""complaintTypeId"": 1," & vbCrLf &
        "    ""customerBankAccountNumber"": ""1234567890""," & vbCrLf &
        "    ""customerName"": ""Nom du client""," & vbCrLf &
        "    ""customerPhoneNumber"": ""2250555607018""," & vbCrLf &
        "    ""customerEmail"": ""email@example.com""," & vbCrLf &
        "    ""description"": ""Description de la réclamation""," & vbCrLf &
        "    ""dynamicInfo"": ""{\""name\"": \""my name\""}""" & vbCrLf &
        "}"

        request.AddParameter("application/json", body, ParameterType.RequestBody)

        Dim response As IRestResponse = client.Execute(request)
        Console.WriteLine(response.Content)
    End Sub
End Module
