package Filter;

import java.util.*;



public class Filter {
	
	public Filter() {	}
	
	/**
	 * 
	 * @param target	- List of Products to filter
	 * @param col		- List of Strings of database columns to search
	 * @param key		- List of Strings of keys to search for
	 * @return
	 */
	public List<Product> filter(List<Product> target, List<String> col, List<Object> key){
		int num_iter = Math.min(col.size(), key.size());										// determine number of searches
		if(num_iter == 0) return target;
		
		List<Product> out = target;
		for(int i = 0; i < num_iter; i++) {
			out = filter(out, col.get(i), key.get(i));
		}
		
		return out;
	}
	
	public List<Product> filter(List<Product> target, String col, Object key){
		LinkedList<Product> out = new LinkedList<Product>();
	
		for(Product p : target) {
			if(p.contains(col, key)) {
				out.add(p);
			}
		}
		
		return out;
	}
}
