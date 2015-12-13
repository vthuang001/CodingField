using UnityEngine;
using System.Collections;

public class Post : MonoBehaviour {
	
	public GameObject PostObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		PostObject.SetActive (true);
	}
	
	public void disappear()
	{
		PostObject.SetActive (false);
	}
}