package com.example.android.n;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;
import android.widget.ListPopupWindow;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemClickListener {
    Button productName;
    ListPopupWindow listPopupWindow;
    String[] products={"كسور", "نزيف", "اغماء","ربو",
            "صرع"};


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Button productName = (Button)findViewById(R.id.fj);

        listPopupWindow = new ListPopupWindow(
                MainActivity.this);
        listPopupWindow.setAdapter(new ArrayAdapter(
                MainActivity.this,R.layout.list_item,products));

        listPopupWindow.setAnchorView(productName);
        listPopupWindow.setWidth(300);
        listPopupWindow.setHeight(400);

        listPopupWindow.setModal(true);
        listPopupWindow.setOnItemClickListener(MainActivity.this);
        //productName.setOnClickListener(new View.OnClickListener() {
        //   @Override
        //   public void onClick(View view) {
        //       Toast.makeText(getBaseContext(),"تم ابلاغ الطوائ بنجاح وألف لابأس عليك",Toast.LENGTH_SHORT).show();
        //   }
      // });
        productName.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                listPopupWindow.show();
            }
        });
        Button b = (Button)findViewById(R.id.ff);
        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                listPopupWindow.show();
               // Toast.makeText(getBaseContext(),"تم ابلاغ الطوائ بنجاح وألف لابأس عليك",Toast.LENGTH_SHORT).show();
            }
        });

        Button c = (Button)findViewById(R.id.fff);
        c.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                listPopupWindow.show();
               // Toast.makeText(getBaseContext(),"تم ابلاغ الطوائ بنجاح وألف لابأس عليك",Toast.LENGTH_SHORT).show();
            }
        });


        Spinner spinner = (Spinner) findViewById(R.id.spinner);
        // Create an ArrayAdapter using the string array and a default spinner layout
        ArrayAdapter<CharSequence> adapter = ArrayAdapter.createFromResource(this,
                R.array.planets_array, android.R.layout.simple_spinner_item);
// Specify the layout to use when the list of choices appears
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
// Apply the adapter to the spinner
        spinner.setAdapter(adapter);
    }


    @Override
    public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
        //productName.setText(products[i]);
        listPopupWindow.dismiss();
        Toast.makeText(getBaseContext(),"تم ابلاغ الطوائ بنجاح وألف لابأس عليك",Toast.LENGTH_SHORT).show();
    }
}
