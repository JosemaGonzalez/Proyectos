package com.example.josema.baloncesto;

import android.content.pm.ActivityInfo;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    ImageView local1,local2,local3,visi1,visi2,visi3;
    TextView local,visitante;
    Button reset;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_LANDSCAPE);
        local1 = (ImageView) findViewById(R.id.l1);
        local2 = (ImageView) findViewById(R.id.l2);
        local3= (ImageView) findViewById(R.id.l3);
        visi1 = (ImageView) findViewById(R.id.v1);
        visi2 = (ImageView) findViewById(R.id.v2);
        visi3 = (ImageView) findViewById(R.id.v3);
        local = (TextView) findViewById(R.id.textViewLocal);
        visitante = (TextView) findViewById(R.id.textViewVisitante);
        reset = (Button) findViewById(R.id.buttonReset);
    }

    public void reiniciar(View v){
        visitante.setText("0");
        local.setText("0");
        Toast.makeText(this,"Comienza el partido", Toast.LENGTH_SHORT).show();
    }

    public void sumar(View v){
        if(local1.isPressed()){
            int ninicial,resul;
            ninicial=Integer.parseInt(local.getText().toString());
            resul=ninicial+1;
            local.setText(String.valueOf(resul));
            Toast.makeText(this,"+1 local", Toast.LENGTH_SHORT).show();

        }
        if(local2.isPressed()){
            int ninicial,resul;
            ninicial=Integer.parseInt(local.getText().toString());
            resul=ninicial+2;
            local.setText(String.valueOf(resul));
            Toast.makeText(this,"+2 local", Toast.LENGTH_SHORT).show();

        }
        if(local3.isPressed()){
            int ninicial,resul;
            ninicial=Integer.parseInt(local.getText().toString());
            resul=ninicial+3;
            local.setText(String.valueOf(resul));
            Toast.makeText(this,"+3 local", Toast.LENGTH_SHORT).show();

        }
        if(visi1.isPressed()){
            int ninicial,resul;
            ninicial=Integer.parseInt(visitante.getText().toString());
            resul=ninicial+1;
            visitante.setText(String.valueOf(resul));
            Toast.makeText(this,"+1 visitante", Toast.LENGTH_SHORT).show();

        }
        if(visi2.isPressed()){
            int ninicial,resul;
            ninicial=Integer.parseInt(visitante.getText().toString());
            resul=ninicial+2;
            visitante.setText(String.valueOf(resul));
            Toast.makeText(this,"+2 visitante", Toast.LENGTH_SHORT).show();

        }
        if(visi3.isPressed()){
            int ninicial,resul;
            ninicial=Integer.parseInt(visitante.getText().toString());
            resul=ninicial+3;
            visitante.setText(String.valueOf(resul));
            Toast.makeText(this,"+3 visitante", Toast.LENGTH_SHORT).show();

        }
    }

}
