import java.util.*;

public class Ingredient {

	public LinkedHashMap<String, Object> deets;
	
	/*
	public int ingredient_id;
	public List<Integer> tag_id;
	public String ingredient_name;
	public String ingredient_des;
	*/
	
	public boolean equals(Ingredient other) {
		return( deets.get("ingredient_id").equals(other.deets.get("ingredient_id")) );
	}
}
