package Filter;

import java.util.*;

public class Product {

	public LinkedHashMap<String, Object> deets;
	
	/*
	public String name;
	public int product_id;
	public String product_des;
	public List<Integer> tags;
	public List<Ingredient> ingredient_list;
	public List<Integer> category_id;
	 */
	public Product() {
		deets = new LinkedHashMap<String, Object>();
	}
	
	public boolean contains(String col, Object key) {
		if(col.getClass() != key.getClass()) return false;
		
		if(!(key instanceof List)) {
			return deets.get(col).equals(key);
		}
		else 
			return ((List) deets.get(col)).contains(key);
	}
	
	public void put(String key, Object o) {
		deets.put(key, o);
	}
	
}
