string prodUrl = "<REPLACE_WITH_PROD_URL>";
string token = "<REPLACE_WITH_YOUR_API_KEY>";

var client = new RestClient($"{prodUrl}/api/v1/complaints");
client.Timeout = -1;

var request = new RestRequest(Method.POST);
request.AddHeader("Authorization", $"Bearer {token}");
request.AddHeader("Content-Type", "application/json");

var requestBody = new {
    complaintTypeId = 1,
    customerBankAccountNumber = "1234567890",
    customerName = "Nom du client",
    customerPhoneNumber = "2250555607018",
    customerEmail = "email@example.com",
    description = "Description de la réclamation",
    dynamicInfo = "{\"name\": \"my name\"}" // Objet stringifié
};

request.AddJsonBody(requestBody);

IRestResponse response = client.Execute(request);
Console.WriteLine(response.Content);
