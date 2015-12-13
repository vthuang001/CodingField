using UnityEngine;
using System.Collections;

public class AchieveGeneral : MonoBehaviour {
	
	public GameObject AchieveGeneralObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		AchieveGeneralObject.SetActive (true);
	}
	
	public void disappear()
	{
		AchieveGeneralObject.SetActive (false);
	}
}