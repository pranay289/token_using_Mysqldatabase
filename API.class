package com.pranay.mynotification;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface Api
{
  @FormUrlEncoded
  @POST("path.php")
    Call<Users> insert(@Field("token") String token);
}
