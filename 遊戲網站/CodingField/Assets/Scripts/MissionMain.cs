using UnityEngine;
using System.Collections;

public class MissionMain : MonoBehaviour {
	
	public GameObject MossionMainObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		MossionMainObject.SetActive (true);
	}
	
	public void disappear()
	{
		MossionMainObject.SetActive (false);
	}
}