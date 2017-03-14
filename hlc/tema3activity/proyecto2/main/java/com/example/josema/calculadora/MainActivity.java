package com.example.josema.calculadora;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    float operador1 = 0, operador2 = 0;
    int ioperador = R.id.buttoac;
    TextView t;
    Button coma;
    boolean operar = false, bpunto = false;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        t = (TextView) findViewById(R.id.textView);
        coma = (Button) findViewById(R.id.buttocoma);
    }

    public void inicializar() {
        operador1 = 0;
        operador2 = 0;
        ioperador = R.id.buttoac;
    }

    public void teclaAC(View v) {
        inicializar();
        teclaC(v);

    }

    public void teclaC(View v) {
        t.setText("0");
        bpunto = false;
    }

    public void operaciones(View v) {
        if (ioperador == R.id.buttoac) {
            ioperador = v.getId();
            operador1 = Float.parseFloat(t.getText().toString());
            teclaC(v);
        }
    }

    public void igual(View v) {
        boolean error = false;
        switch (ioperador) {
            case R.id.buttosuma:
                operador2 = operador1 + Float.parseFloat(t.getText().toString());
                break;
            case R.id.buttorest:
                operador2 = operador1 - Float.parseFloat(t.getText().toString());
                break;
            case R.id.buttodivi:
                if (operador2 == 0) {
                    Toast.makeText(this, "Error division entre 0", Toast.LENGTH_SHORT).show();
                    error = true;
                    t.setText("Infinito");
                } else {
                    operador2 = operador1 / Float.parseFloat(t.getText().toString());
                }
                break;
            case R.id.buttomulti:
                operador2 = operador1 * Float.parseFloat(t.getText().toString());
                break;
            case R.id.buttoporc:
                operador2 = operador1 * (Float.parseFloat(t.getText().toString()) / 100);
                break;
        }
        if (!error) {
            t.setText(String.valueOf(operador2));
            inicializar();
        }

    }

    public void numeros(View v) {

        String textoBotonPulsado;
        Button botonPulsado = (Button) v;
        textoBotonPulsado = botonPulsado.getText().toString();
        Toast.makeText(this, "Has pulsado " + textoBotonPulsado, Toast.LENGTH_SHORT).show();
        if (t.getText().toString().equals("0") || operar) {
            t.setText("");
            operar = false;
        }
        if (bpunto && (v.getId() == coma.getId())) {
            Toast.makeText(this, "No se puede poner dos puntos", Toast.LENGTH_SHORT).show();
        } else {
            if (v.getId() == coma.getId()) {
                bpunto = true;
            }
            t.setText((t.getText().toString() + textoBotonPulsado));
        }
    }
}