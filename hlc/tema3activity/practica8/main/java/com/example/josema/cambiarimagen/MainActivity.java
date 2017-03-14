package com.example.josema.cambiarimagen;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    ImageView imagen;
    TextView texto;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        imagen = (ImageView) findViewById(R.id.imageView);
        texto = (TextView) findViewById(R.id.textView);

    }
    public void comida(View view){
        imagen.setImageResource(R.drawable.after_cookie);
        texto.setText("Estoy lleno");
    }
}
