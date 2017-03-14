package com.example.josema.sumanumeros;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    TextView t;
    EditText edit, edit2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        edit = (EditText) findViewById(R.id.editText);
        edit2 = (EditText) findViewById(R.id.editText2);
        t = (TextView) findViewById(R.id.textView4);
    }

    protected void suma(View v) {
        //comprobamos que no esta vacio el edittext, si lo esta mostramos un mensaje emergente
        if (edit.getText().toString().equals("")||edit2.getText().toString().equals("")) {
            Toast.makeText(this,"Debe introducir un número", Toast.LENGTH_SHORT).show();
        } else {
            //hay que hacer casting de los numeros y al mostrar hacerlo de nuevo
            double resul = Double.parseDouble(edit.getText().toString()) + Double.parseDouble(edit2.getText().toString());
            t.setText("Resultado: " + String.valueOf(resul));
        }
    }
}
