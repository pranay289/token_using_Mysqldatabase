package com.pranay.mynotification;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Apiclient {

    private static Retrofit retrofit=null;
    private static Apiclient retrofitclient;
    public  Apiclient()
    {

        if (retrofit==null)
        {
            retrofit=new Retrofit.Builder()
                    .baseUrl(BASE_URL)
                    .addConverterFactory(GsonConverterFactory.create())
                    .build();

        }

    }

    public static synchronized Apiclient getInstance()
    {
        if (retrofitclient==null)
        {
            retrofitclient=new Apiclient();
        }
        return retrofitclient;
    }

    public Api getapi()
    {
        return retrofit.create(Api.class);
    }
}
