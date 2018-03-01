package com.mesaynegash.examprep;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

/**
 * Created by Mesay on 2/27/2018.
 */

public class FieldActivity extends AppCompatActivity {

    String get;
    public final static String Message = "com.mesaynegash.FieldActivity.MESSAGE";

    Button c1, c2, c3, c4, c5;
    public void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.field_of_study);
        Intent intent = getIntent();//recieving the intent send by the Navigation activity
        get = intent.getStringExtra(ExamActivity.Message);//converting that intent message to string using the getStringExtra() method



        c1 = (Button) findViewById(R.id.b2);
        c2 = (Button) findViewById(R.id.b3);


        c1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(FieldActivity.this, SubjectsActivity.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });
        c2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(FieldActivity.this, SubjectsActivity.class);
                intent.putExtra(Message, "c2");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });


    }
}

