package sql_java;

import java.io.BufferedReader;
import java.io.InputStreamReader;

public class query {
    public static void main(String[] args) {

        try {
            connect();
        } catch (Exception e) {
            e.printStackTrace();
        }

    }

public static boolean connect() throws Exception {
    //https://stackoverflow.com/questions/5711084/java-runtime-getruntime-getting-output-from-executing-a-command-line-program
    String runtimeArgs[] = {"C:\\tools\\mysql\\current\\bin\\mysql.exe", "-u", "root", "-p1234"};

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



    return true;
    }
}
