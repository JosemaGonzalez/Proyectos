package com.example.josema.cafe;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import org.w3c.dom.Text;

public class MainActivity extends AppCompatActivity {
    Button suma, resta;
    TextView texto;
    EditText edit;
    CheckBox check1, check2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        suma = (Button) findViewById(R.id.btnsuma);
        resta = (Button) findViewById(R.id.btnresta);
        texto = (TextView) findViewById(R.id.resul);
        edit = (EditText) findViewById(R.id.editText);
        check1 = (CheckBox) findViewById(R.id.checkBox);
        check2 = (CheckBox) findViewById(R.id.checkBox2);

    }

    public void sumar(View v) {
        int resultado = Integer.parseInt(texto.getText().toString()) + 1;
        texto.setText(String.valueOf(resultado));
    }

    public void restar(View v) {
        int numero = Integer.parseInt(texto.getText().toString());
        if (numero <= 0) {
            texto.setText(String.valueOf(0));
        } else {
            int resultado = numero - 1;
            texto.setText(String.valueOf(resultado));
        }
    }
    public void cafeteria(View v){
        String nombre = edit.getText().toString();
        String topping="";
        if(check1.isChecked()==true){
            topping = check1.getText().toString();
        }
        if(check2.isChecked()==true){
            topping =topping.toString() +" "+ check2.getText().toString();
        }
        String text = texto.getText().toString();
        int total = Integer.parseInt(text)*6;
        Toast.makeText(this,"Nombre: "+nombre+"\nToppings: "+topping+"\nCantidad: "+ text+"\nTotal: "+String.valueOf(total)+"\nGracias!", Toast.LENGTH_SHORT).show();

    }
}
