package com.mesaynegash.examprep;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.widget.Button;

/**
 * Created by Mesay on 2/27/2018.
 */

public class LoadExam extends AppCompatActivity {
    public final static String Message = "com.mesaynegash.ExamActivity.MESSAGE";

    Button c1, c2, c3, c4, c5;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_exam);

        WebView webView;
        webView = (WebView) findViewById(R.id.webView);
        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webView.loadUrl("file:///android_asset/nexam/exams/natural/biology_2005.html");
    }
}