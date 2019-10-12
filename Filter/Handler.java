package Filter;

import java.util.*;

import Filter.Filter;
import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;

import java.io.*;

public class Handler {
	
	private Filter filter;
	
	public String query(String sql_query, String table, List<String> col, List<Object> val) throws Exception {
		ArrayList<ArrayList<String>> raw = query_server(sql_query, table);
		List<Product> list = arrayToList(raw);
		List<Product> filtered = filter.filter(list, col, val);	
		return listToJson(filtered);
	}
	
	public ArrayList<ArrayList<String>> query_server(String sql_query, String table) throws Exception{
		Query query = new Query();
		return query.querydb(sql_query, table);
	}
	
	public List<Product> arrayToList(ArrayList<ArrayList<String>> arrayList){
		List<Product> out = new LinkedList<Product>();
		
		if(arrayList.size() < 2) {
			return null;
		}
		
		for(int i = 1; i < arrayList.size(); i++) {
			Product temp = new Product();
			for(int j = 0; j < arrayList.get(i).size(); j++) {
				temp.put(arrayList.get(0).get(j), arrayList.get(i).get(j));
			}
			out.add(temp);
		}
		
		return out;
	}
	
	public String listToJson(List<Product> product) {
		
		List<Product> elements = new ArrayList<Product>();
		for(int i = 0; i < 3; i++) {
			elements.add(new Product());
			
			elements.get(i).put(("" + (char)('a' + i)), Integer.toString(i));
		}
		
		ObjectMapper mapper = new ObjectMapper();
		
		String json = "";
		try {
			json = mapper.writeValueAsString(elements);
		}
		catch (JsonProcessingException e) {
			e.printStackTrace();
		}
		return json;
	}
	
	
	
}
