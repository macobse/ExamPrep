package com.mesaynegash.examprep;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

/**
 * Created by Mesay on 2/27/2018.
 */

public class YearActivity extends AppCompatActivity {

    String get;
    public void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_field_of_study);
        Intent intent = getIntent();//recieving the intent send by the Navigation activity
        get = intent.getStringExtra(FieldActivity.Message);//converting that intent message to string using the getStringExtra() method
//        Log.v("Message ==== ", "Test == "+get);

        final ListView lv = (ListView) findViewById(R.id.lv);




        // Initializing a new String Array
        String[] natural = new String[] {
                "2005",
                "2006",
                "2007",
                "2008"

        };

        final List<String> subject_list = new ArrayList<String>(Arrays.asList(natural));

        // Create an ArrayAdapter from List
        final ArrayAdapter<String> arrayAdapter = new ArrayAdapter<String>
                (this, android.R.layout.simple_list_item_1, subject_list);

        // DataBind ListView with items from ArrayAdapter
        lv.setAdapter(arrayAdapter);

        lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            public void onItemClick(AdapterView<?> parent, View itemClicked,
                                    int position, long id) {
                TextView textView = (TextView) itemClicked;
                String strText = textView.getText().toString();
                if (strText.equalsIgnoreCase("2005")) {
// Launch the Game Activity
                    startActivity(new Intent(YearActivity.this,
                            LoadExam.class));
                } else if (strText.equalsIgnoreCase("2006")) {
// Launch the Game Activity
                    startActivity(new Intent(YearActivity.this,
                            LoadExam.class));
                } else if (strText.equalsIgnoreCase("2007")) {
// Launch the Game Activity
                    startActivity(new Intent(YearActivity.this,
                            LoadExam.class));
                } else if (strText.equalsIgnoreCase("2008")) {
// Launch the Game Activity
                    startActivity(new Intent(YearActivity.this,
                            LoadExam.class));
                }
            }
        });
    }
}
