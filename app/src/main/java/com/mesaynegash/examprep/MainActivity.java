package com.mesaynegash.examprep;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    public final static String Message = "com.mesaynegash.MainActivity.MESSAGE";
    Button c1, c2, c3, c4, c5;
    private ProgressDialog progressBar;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        c1 = (Button) findViewById(R.id.b1);
        c2 = (Button) findViewById(R.id.b2);
        c3 = (Button) findViewById(R.id.b3);
        c4 = (Button) findViewById(R.id.b4);


        c1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                //To show button click
//                new Handler().postDelayed(new Runnable() {@Override public void run(){}}, 400);
//
//
//                progressBar = new ProgressDialog(v.getContext());//Create new object of progress bar type
//                progressBar.setCancelable(false);//Progress bar cannot be cancelled by pressing any wher on screen
//                progressBar.setMessage("Getting Questions Ready ...");//Title shown in the progress bar
//                progressBar.setProgressStyle(ProgressDialog.STYLE_SPINNER);//Style of the progress bar
//                progressBar.setProgress(0);//attributes
//                progressBar.setMax(100);//attributes
//                progressBar.show();//show the progress bar
//                //This handler will add a delay of 3 seconds
//                new Handler().postDelayed(new Runnable() {
//                    @Override
//                    public void run() {
//                        //Intent start to open the navigation drawer activity
//                        progressBar.cancel();//Progress bar will be cancelled (hide from screen) when this run function will execute after 3.5seconds
                Intent intent = new Intent(MainActivity.this, ExamActivity.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
//                    }
//                }, 2000);
//            }
//        });
            }
        });
        c2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this, AboutSchool.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });
        c3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this, ContactSchool.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });
        c4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this, DevelopersActivity.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });
    }
}