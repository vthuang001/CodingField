using UnityEngine;
using System.Collections;

public class Activity : MonoBehaviour {
	
	public GameObject ActivityObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		ActivityObject.SetActive (true);
	}
	
	public void disappear()
	{
		ActivityObject.SetActive (false);
	}
}