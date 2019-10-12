package sql_java;

import java.io.BufferedReader;
import java.io.InputStreamReader;

public class query {
    public static void main(String[] args) {

        try {
            query(null);
        } catch (Exception e) {
            e.printStackTrace();
        }

    }
/*
Pass your sql query as a String[] with each space represented as new element in the array
For example to call 'describe products', pass query({"describe", "products");
 */
public static void query(String[] q) throws Exception {
    //https://stackoverflow.com/questions/5711084/java-runtime-getruntime-getting-output-from-executing-a-command-line-program
    String[] runtimeArgs = new String[q.length + 5];
    runtimeArgs[0] = "C:\\tools\\mysql\\current\\bin\\mysql.exe";
    runtimeArgs[1] = "-u";
    runtimeArgs[2] = "root";
    runtimeArgs[3] = "-p1234";
    runtimeArgs[4] = "-e";

    Runtime runtime = Runtime.getRuntime();
    Process proc = runtime.exec(runtimeArgs);

    BufferedReader output = new BufferedReader(new InputStreamReader(proc.getErrorStream()));
    BufferedReader err = new BufferedReader(new InputStreamReader(proc.getErrorStream()));

    String temp = "";
    while ((temp = output.readLine()) != null){
        System.out.println(temp);
    }

    while ((temp = err.readLine()) != null){
        System.out.println(temp);
    }

    }
}
