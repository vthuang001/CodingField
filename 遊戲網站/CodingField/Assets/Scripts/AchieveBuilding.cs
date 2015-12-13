using UnityEngine;
using System.Collections;

public class AchieveBuilding : MonoBehaviour {
	
	public GameObject AchieveBuildingObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		AchieveBuildingObject.SetActive (true);
	}
	
	public void disappear()
	{
		AchieveBuildingObject.SetActive (false);
	}
}