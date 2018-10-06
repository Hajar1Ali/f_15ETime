package com.example.hmooddes.application;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

import com.android.volley.RequestQueue;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
ArrayList<String> words= new ArrayList<>();
TextView text;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        getJson();
text=(TextView) findViewById(R.id.t1);
text.setText(words.get(0));
    }

    public void getJson(){
        String json;
        try {
            InputStream is = getAssets().open("eTimeTable.json");
            int size = is.available();
            byte[] buffer = new byte[size];
            is.read(buffer);
            is.close();
            json = new String(buffer, "UTF-8");
            JSONArray jsonArrsy=new JSONArray(json);

 for(int i=0;i<jsonArrsy.length();i++){
     JSONObject object = jsonArrsy.getJSONObject(i);
         words.add(object.getString("freeBed"));


 }

        } catch (IOException e) {
            e.printStackTrace();
        } catch (JSONException e) {
            e.printStackTrace();
        }

    }
}
