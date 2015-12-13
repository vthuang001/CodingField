using UnityEngine;
using System.Collections;

public class Achieve : MonoBehaviour {
	
	public GameObject AchieveObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		AchieveObject.SetActive (true);
	}
	
	public void disappear()
	{
		AchieveObject.SetActive (false);
	}
}