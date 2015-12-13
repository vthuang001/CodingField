using UnityEngine;
using System.Collections;

public class AchieveAnimal : MonoBehaviour {
	
	public GameObject AchieveAnimalObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		AchieveAnimalObject.SetActive (true);
	}
	
	public void disappear()
	{
		AchieveAnimalObject.SetActive (false);
	}
}