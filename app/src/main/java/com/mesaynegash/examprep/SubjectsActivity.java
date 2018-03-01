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

public class SubjectsActivity extends AppCompatActivity {

    String get;
    public void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_field_of_study);
        Intent intent = getIntent();//recieving the intent send by the Navigation activity
        get = intent.getStringExtra(FieldActivity.Message);//converting that intent message to string using the getStringExtra() method
//        Log.v("Message ==== ", "Test == "+get);

        final ListView lv = (ListView) findViewById(R.id.lv);
        final List<String> subject_list;



        // Initializing a new String Array
        String[] natural = new String[] {
                "Biology",
                "Civics",
                "Chemistry",
                "English",
                "Mathematics",
                "Physics",
                "SAT"

        };
        String[] social = new String[] {
                "Civics",
                "Geography",
                "History",
                "English",
                "Mathematics",
                "Economics",
                "SAT"

        };
        if (get!=null){
            if (get.equalsIgnoreCase("c1")) {
                // Create a List from String Array elements
                subject_list = new ArrayList<String>(Arrays.asList(natural));
            }
            else{
                subject_list = new ArrayList<String>(Arrays.asList(social));
            }
        }
        else
            subject_list = new ArrayList<String>(Arrays.asList(natural));

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
                if (strText.equalsIgnoreCase("Biology")) {
                    // Launch the Game Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                } else if (strText.equalsIgnoreCase("Civics")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                } else if (strText.equalsIgnoreCase("Chemistry")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                } else if (strText.equalsIgnoreCase("English")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }else if (strText.equalsIgnoreCase("Physics")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }else if (strText.equalsIgnoreCase("SAT")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }else if (strText.equalsIgnoreCase("Mathematics")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }else if (strText.equalsIgnoreCase("Geography")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }else if (strText.equalsIgnoreCase("History")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }else if (strText.equalsIgnoreCase("Economics")) {
                    // Launch the Help Activity
                    startActivity(new Intent(SubjectsActivity.this,
                            YearActivity.class));
                }
            }
        });
    }
}
