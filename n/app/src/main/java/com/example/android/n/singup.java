package com.example.android.n;

import android.content.Intent;
import android.os.Bundle;
import android.app.Activity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class singup extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_singup);


        Button b = (Button)findViewById(R.id.uploadButton);
        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent ii=new Intent(singup.this,s.class);
                startActivity(ii);
            }
        });


        Button a = (Button)findViewById(R.id.uploadButtonnn);
        a.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent ii=new Intent(singup.this,MainActivity.class);
                startActivity(ii);
            }
        });

        Button d = (Button)findViewById(R.id.uploadButtonn);
        d.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent ii=new Intent(singup.this,sss.class);
                startActivity(ii);
            }
        });
    }

}
