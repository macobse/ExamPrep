package com.mesaynegash.examprep;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

/**
 * Created by Mesay on 2/28/2018.
 */

public class ContactSchool  extends AppCompatActivity {
    public final static String Message = "com.mesaynegash.ExamActivity.MESSAGE";

    Button c1, c2, c3, c4, c5;
    Button b;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.scool_contact);

        b = (Button) findViewById(R.id.website);
        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                //Use when user trigger on  visit website
                String url = "https://www.schooloftomorrow.com";
                Intent intent = new Intent(Intent.ACTION_VIEW);
                intent.setData(Uri.parse(url));
                Intent chooser = Intent.createChooser(intent, "Open with");
                startActivity(chooser);

            }
        });


    }
}

