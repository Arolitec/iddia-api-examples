using RestSharp;
using System;

class Program
{
    static void Main(string[] args)
    {
        string apiUrl = "<REPLACE_WITH_PROD_URL>/api/v1/complaint-types";
        string token = "<REPLACE_WITH_YOUR_API_KEY>";

        var client = new RestClient(apiUrl);
        client.Timeout = -1;

        var request = new RestRequest(Method.GET);
        request.AddHeader("Authorization", $"Bearer {token}");
        request.AddHeader("Content-Type", "application/json");

        IRestResponse response = client.Execute(request);

        if (response.IsSuccessful)
        {
            Console.WriteLine(response.Content);
        }
        else
        {
            Console.WriteLine($"Erreur lors de la récupération des types de réclamations : {response.ErrorMessage}");
        }
    }
}
