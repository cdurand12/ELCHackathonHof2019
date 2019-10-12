package Filter;

import java.util.LinkedHashMap;

public class Tag {
	public LinkedHashMap<String, Object> deets;
	
	/*
	public int tag_id;
	public String tag_des;
	public int tag_rating;
	*/
	
	public boolean equals(Tag other) {
		return( deets.get("ingredient_id").equals(other.deets.get("ingredient_id")) );
	}
	
}
