package com.example.josema.aplicacion;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    TextView texto;
    Button boton,boton1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        texto = (TextView) findViewById(R.id.textView5);
        boton = (Button) findViewById(R.id.button);
        boton.setOnClickListener(new Button.OnClickListener(){
            @Override
            public void onClick(View v) {
                texto.setText("Hola caracola");
            }
        });
        boton1 = (Button) findViewById(R.id.button2);
        boton1.setOnClickListener(new Button.OnClickListener(){
            @Override
            public void onClick(View v) {
                texto.setText("");
            }
        });
    }

}
