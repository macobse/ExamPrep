package com.mesaynegash.examprep;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

/**
 * Created by Mesay on 2/25/2018.
 */

public class ExamActivity extends AppCompatActivity {
    public final static String Message = "com.mesaynegash.ExamActivity.MESSAGE";

    Button c1, c2, c3, c4, c5;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.national_exam);

//        WebView webView;
//        webView = (WebView) findViewById(R.id.webView);
//        WebSettings webSettings = webView.getSettings();
//        webSettings.setJavaScriptEnabled(true);
//        webView.loadUrl("file:///android_asset/nexam/index.html");

        c1 = (Button) findViewById(R.id.b2);
        c2 = (Button) findViewById(R.id.b3);


        c1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(ExamActivity.this, FieldActivity.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });
        c2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(ExamActivity.this, FieldActivity.class);
                intent.putExtra(Message, "c1");//by this statement we are sending the name of the button that invoked the new Questions.java activity "Message" is defined by the name of the package + MESSAGE
                startActivity(intent);
            }
        });

    }
}
