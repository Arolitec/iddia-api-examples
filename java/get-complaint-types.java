import okhttp3.*;

import java.io.IOException;

public class Main {
    public static void main(String[] args) throws IOException {
        String apiUrl = "<REPLACE_WITH_PROD_URL>/api/v1/complaint-types";
        String token = "<REPLACE_WITH_YOUR_API_KEY>";

        OkHttpClient client = new OkHttpClient().newBuilder().build();

        Request request = new Request.Builder()
                .url(apiUrl)
                .method("GET", null)
                .addHeader("Authorization", "Bearer " + token)
                .addHeader("Content-Type", "application/json")
                .build();

        Response response = client.newCall(request).execute();
        String responseBody = response.body().string();

        if (response.isSuccessful()) {
            System.out.println(responseBody);
        } else {
            System.out.println("Erreur lors de la récupération des types de réclamations : " + responseBody);
        }
    }
}
