package Filter;

import java.io.*;
import java.util.*;

public class Query {

    public static HashMap<String, Integer> databaseSizeMap = new HashMap<>(); //database, size

/*
Pass your sql query as a String[] with each space represented as new element in the array
For example to call 'describe products', pass query({"describe", "products");
 */
public ArrayList<ArrayList<String>> querydb(String qInput, String tableName) throws Exception {
    //https://stackoverflow.com/questions/5711084/java-runtime-getruntime-getting-output-from-executing-a-command-line-program
    //https://stackoverflow.com/questions/5711084/java-runtime-getruntime-getting-output-from-executing-a-command-line-program
    String[] q = qInput.split("\\s+");
    String[] runtimeArgs = new String[q.length + 8];
    runtimeArgs[0] = "C:\\tools\\mysql\\current\\bin\\mysql.exe";
    runtimeArgs[1] = "-u";
    runtimeArgs[2] = "root";
    runtimeArgs[3] = "-p1234";
    runtimeArgs[4] = "-e";
    runtimeArgs[5] = "\"use";
    runtimeArgs[6] = "elcdb;";



    for (int i = 0; i < q.length; i++) {
        runtimeArgs[7 + i] = q[i];
    }
    runtimeArgs[runtimeArgs.length - 1] = "\"";


    Runtime runtime = Runtime.getRuntime();
    Process proc = runtime.exec(runtimeArgs);

    BufferedReader output = new BufferedReader(new InputStreamReader(proc.getInputStream()));
    //output.lines().forEach(System.out::println);

    BufferedReader err = new BufferedReader(new InputStreamReader(proc.getErrorStream()));
    //err.lines().forEach(System.out::println);


    String temp = "";
    String sqlOutput = "";
    int j = 1;
    while ((temp = output.readLine()) != null){
        sqlOutput += temp;
        sqlOutput += "\n";

        if (j % databaseSizeMap.get(tableName) == 0) sqlOutput += "\t";
        j++;
    }
    String arr[] = sqlOutput.split("\\s+");


    ArrayList<ArrayList<String>> database2DArray = new ArrayList<>();

    int sz = databaseSizeMap.get(tableName) + 1;
    int w = 0;

    for(int i = 0; i < (arr.length / sz); i++){
        database2DArray.add(new ArrayList<>());

        for(int g = 0; g < sz; g++){
            database2DArray.get(i).add(arr[(i*sz) + g]);
        }
    }
    //System.out.println(database2DArray.get(0).size());
    for (int v = 0; v < database2DArray.size(); v++) {
    //    System.out.print(database2DArray.get(v).size());
        for (int b = 0; b < database2DArray.get(v).size(); b++) {
//           System.out.print(database2DArray.get(v).get(b) + "\t");
        }
//        System.out.println();
    }

    return database2DArray;
    }

/*	public static void main(String[] args) {

	databaseSizeMap.put("products", 5);
	databaseSizeMap.put("tags", 2);
	databaseSizeMap.put("ingredients", 3);

	try {

    	String s = "select * from products";
    	ArrayList<ArrayList<String>> x = querydb(s, "products");
//		for (int i = 0; i < x.length; i++) {
//			System.out.println(x[i]);
//		}
		} catch (Exception e) {
    	e.printStackTrace();
		}

	}*/
}