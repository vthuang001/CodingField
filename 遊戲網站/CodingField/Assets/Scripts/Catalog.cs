using UnityEngine;
using System.Collections;

public class Catalog : MonoBehaviour {
	
	public GameObject CatalogObject;
    public GameObject GiftObject;
    public GameObject ExitObject;
    // Use this for initialization
    void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
        if ( CatalogObject.activeSelf == true )
        {
            CatalogObject.SetActive(false);
            GiftObject.SetActive(true);
            ExitObject.SetActive(true);
        }
        else
        {
            CatalogObject.SetActive(true);
            GiftObject.SetActive(false);
            ExitObject.SetActive(false);
        }
	}
}