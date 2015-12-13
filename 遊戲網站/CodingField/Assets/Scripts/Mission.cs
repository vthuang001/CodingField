using UnityEngine;
using System.Collections;

public class Mission : MonoBehaviour {
	
	public GameObject MossionObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		MossionObject.SetActive (true);
	}
	
	public void disappear()
	{
		MossionObject.SetActive (false);
	}
}