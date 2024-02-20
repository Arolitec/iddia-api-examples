import okhttp3.*;

import java.io.IOException;

public class Main {
    public static void main(String[] args) throws IOException {
        OkHttpClient client = new OkHttpClient().newBuilder().build();

        MediaType mediaType = MediaType.parse("application/json");
        RequestBody body = RequestBody.create(mediaType, "{\n" +
                "    \"complaintTypeId\": 1,\n" +
                "    \"customerBankAccountNumber\": \"1234567890\",\n" +
                "    \"customerName\": \"Nom du client\",\n" +
                "    \"customerPhoneNumber\": \"2250555607018\",\n" +
                "    \"customerEmail\": \"email@example.com\",\n" +
                "    \"description\": \"Description de la réclamation\",\n" +
                "    \"dynamicInfo\": \"{\\\"name\\\": \\\"my name\\\"}\" // Objet stringifié\n" +
                "}");

        Request request = new Request.Builder()
                .url("<REPLACE_WITH_PROD_URL>/api/v1/complaints")
                .method("POST", body)
                .addHeader("Authorization", "Bearer <REPLACE_WITH_YOUR_API_KEY>")
                .addHeader("Content-Type", "application/json")
                .build();

        Response response = client.newCall(request).execute();
        String responseBody = response.body().string();
        System.out.println(responseBody);
    }
}
